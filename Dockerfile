FROM ubuntu:latest
LABEL authors="matheus.nexus"

ENTRYPOINT ["top", "-b"]
