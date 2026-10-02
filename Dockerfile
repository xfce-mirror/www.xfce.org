FROM python:3.13-slim

ARG HUGO_VERSION=0.161.1
ARG HUGO_GETTEXT_VERSION=0.6.0
ARG TX_VERSION=1.6.17

RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    gettext \
    git \
    && curl -sfL "https://github.com/gohugoio/hugo/releases/download/v${HUGO_VERSION}/hugo_extended_${HUGO_VERSION}_linux-amd64.tar.gz" | tar -xzf - -C /usr/bin hugo \
    && curl -sfL "https://github.com/transifex/cli/releases/download/v${TX_VERSION}/tx-linux-amd64.tar.gz" | tar -xzf - -C /usr/bin tx \
    && rm -rf /var/lib/apt/lists/*

RUN pip install --no-cache-dir polib==1.2.0 hugo-gettext==${HUGO_GETTEXT_VERSION} \
    && git config --global --add safe.directory /src

WORKDIR /src
