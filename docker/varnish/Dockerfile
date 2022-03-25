FROM alpine:3.8

LABEL maintainer="Jeff Ochoa"

WORKDIR /srv/app/

ENV VCL_CONFIG '/etc/varnish/default.vcl'
ENV CACHE_SIZE 64m

COPY ./default.vcl ${VCL_CONFIG}
COPY ./start.sh start

RUN apk add varnish \
    && chmod 0755 start

EXPOSE 8080