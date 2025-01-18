Start-Process -NoNewWindow -FilePath "docker" -ArgumentList "compose up"
Start-Sleep -Seconds 5
docker exec mediawiki bash -c "cd /var/www/html && ./init.sh"