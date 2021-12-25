FROM mysql:8

# Copy the content of the scripts/ directory to container
# All scripts in docker-entrypoint-initdb.d/ are automatically
# executed alphabetically during container startup
COPY ./scripts/ /docker-entrypoint-initdb.d/