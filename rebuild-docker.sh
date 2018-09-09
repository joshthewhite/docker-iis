#!/bin/sh

docker stop iis-site && docker rm iis-site
#docker rmi iis-image
docker build -t iis-image .
docker run -d -p 8000:8000 -v d:/workspace/docker-iis/content:c:/site --name iis-site iis-image
docker inspect -f "{{ .NetworkSettings.Networks.nat.IPAddress }}" iis-site
