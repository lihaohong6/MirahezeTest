docker compose up &
sleep 5
docker exec mediawiki bash -c "cd /var/www/html && ./init.sh"