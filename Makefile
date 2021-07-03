build:
	docker build --tag 7.2 .
	docker run --detach  --tty --publish 80:8080 --volume $(CURDIR)/app:/app --name 72_test_1 php7.2
	docker exec -it 72_test_1 bash build.sh

server_up:
	docker container start 72_test_1
	docker exec 72_test_1 php -S 0.0.0.0:8080 /app/public

server_down:
	@echo "Stopping container"
	docker container stop 72_test_1

purge: server_down
	@echo "Deleting container"
	docker container rm 72_test_1
