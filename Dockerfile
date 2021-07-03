FROM ubuntu:hirsute
WORKDIR /tmp
RUN mkdir /app
COPY ./build.sh /tmp/build.sh
EXPOSE 8080
VOLUME /app
