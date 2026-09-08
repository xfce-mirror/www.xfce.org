FROM python:3.13-slim

ARG HUGO_VERSION=0.161.1

RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    gettext \
    git \
    && curl -sfL "https://github.com/gohugoio/hugo/releases/download/v${HUGO_VERSION}/hugo_extended_${HUGO_VERSION}_linux-amd64.tar.gz" | tar -xzf - -C /usr/bin hugo \
    && rm -rf /var/lib/apt/lists/*

RUN pip install --no-cache-dir polib==1.2.0 hugo-gettext==0.6.0 \
    && git config --global --add safe.directory /src

WORKDIR /src
