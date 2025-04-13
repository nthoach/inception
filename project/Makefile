name = inception
all:
	@printf "Launch configuration ${name}...\n"
	@bash srcs/requirements/wordpress/tools/make_dir.sh
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d nginx mariadb wordpress

bonus:
	@printf "Launching all services (bonus) for ${name}...\n"
	@bash srcs/requirements/wordpress/tools/make_dir.sh
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --build

build:
	@printf "Building configuration ${name}...\n"
	@bash srcs/requirements/wordpress/tools/make_dir.sh
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --build nginx mariadb wordpress

down:
	@printf "Stopping configuration ${name}...\n"
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env down

re: down
	@printf "Rebuild configuration ${name}...\n"
	@bash srcs/requirements/wordpress/tools/make_dir.sh
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --build nginx mariadb wordpress
	#@sudo cp -a ~/saved_data/. ~/data/

save:
	@sudo cp -a ~/data ~/saved_data

data:
	@printf "Building configuration ${name}...\n"
	@sudo cp -a ~/saved_data/. ~/data/
	@bash srcs/requirements/wordpress/tools/make_dir.sh
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --build nginx mariadb wordpress

copy:
	@sudo cp -a ~/saved_data/. ~/data/
clean: down
	@printf "Cleaning configuration ${name}...\n"
	@docker system prune -a
	# @sudo rm -f srcs/.env
	# @sudo rm -rf ~/data/wordpress/
	# @sudo rm -rf ~/data/mariadb/

fclean:
	@printf "Total clean of all configurations docker\n"
	@if [ ! -z "$$(docker ps -qa)" ]; then docker stop $$(docker ps -qa); fi
	@docker system prune --all --force --volumes
	@docker network prune --force
	@docker volume prune --force
	@sudo rm -f srcs/.env
	@sudo rm -f ~/project/srcs/requirements/nginx/tools/honguyen.42.fr.crt
	@sudo rm -f ~/project/srcs/requirements/nginx/tools/honguyen.42.fr.key
	@sudo rm -rf ~/data/

.PHONY	: all build down re clean fclean