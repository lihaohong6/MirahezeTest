## Start

```shell
docker compose up
```
Wait for it to start. Then, in a separate terminal:
```shell
docker exec mediawiki bash -c "cd /var/www/html && ./init.sh"
```

## Reset

This will wipe out everything.
```
docker compose down -v
```
