# Guestbook Application

This application is a personal project that is using symfony framework. 

## Requirements

You need `docker` and `docker-compose` in order to run this application.
If you don't have `make` on your operating system for running the application,
you need to read `Makefile` and do as `up` method says, otherwise you just need
to follow [Running](#run-application) section.

Alongside these tools the application uses `mkcert` tool for makeing valid ssh domain address.

## Domain

### Linux

The application is listening to `guestbook.test` as the domain address, and if you want to access
the application using this domain and you're a linux user, you need to run this code.

```shell
echo '0.0.0.0 guestbook.test' | sudo tee -a /etc/hosts
```

### Windows

For windows 10 users its a similar process, you need to add bellow code to the end of `hosts` file
in the `c:\Windows\System32\Drivers\etc\hosts` path.

**Attention:** you need to change space between `0.0.0.0` and `guestbook.test` to tab character
for windows to work.

```shell
0.0.0.0 guestbook.test
```

## Run Application

for running application you need to execute `up` method using `make` command
like bellow:

```shell
make up
```
