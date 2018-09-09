FROM microsoft/iis

RUN mkdir C:\site\public
RUN mkdir C:\php

ADD https://windows.php.net/downloads/releases/php-7.2.9-nts-Win32-VC15-x86.zip /php.zip
RUN powershell -NoProfile -Command \
    Expand-Archive c:\php.zip -DestinationPath c:\php
COPY php.ini /php/php.ini

RUN setx path %path%;C:\php

ADD https://download.microsoft.com/download/6/A/A/6AA4EDFF-645B-48C5-81CC-ED5963AEAD48/vc_redist.x86.exe /vc_redist.x64.exe
RUN C:\vc_redist.x64.exe /quiet /install

ADD https://getcomposer.org/installer /php/composer-setup.php
RUN c:\php\php.exe c:\php\composer-setup.php --quiet --install-dir="c:\php"
RUN echo @php "%~dp0composer.phar" %*>composer.bat

RUN powershell -NoProfile -Command Install-WindowsFeature -Name Web-CGI

ADD https://download.microsoft.com/download/D/D/E/DDE57C26-C62C-4C59-A1BB-31D58B36ADA2/rewrite_amd64_en-US.msi /rewrite.msi
RUN c:\rewrite.msi /quiet

RUN powershell -NoProfile -Command \
    Import-module IISAdministration; \
    New-IISSite -Name "Site" -PhysicalPath C:\site\public -BindingInformation "*:8000:"

RUN %windir%\system32\inetsrv\appcmd set config /section:system.webServer/fastCGI \
    /+[fullPath='c:\php\php-cgi.exe',activityTimeout='9000',requestTimeout='9000'].environmentVariables.[name='PHP_DOCUMENT_ROOT',value='c:\site\public'] \
    /commit:apphost
RUN %windir%\system32\inetsrv\appcmd set config /section:system.webServer/handlers \
    /+[name='PHP_via_FastCGI',path='*.php',verb='*',modules='FastCgiModule',scriptProcessor='c:\php\php-cgi.exe',resourceType='File'] \
    /commit:apphost
RUN %windir%\system32\inetsrv\appcmd.exe unlock config -section:system.webServer/handlers
RUN %windir%\system32\inetsrv\appcmd.exe unlock config -section:system.webServer/modules
RUN %windir%\system32\inetsrv\appcmd.exe unlock config -section:system.webServer/rewrite/allowedServerVariables

EXPOSE 8000

#ADD content/ /site
