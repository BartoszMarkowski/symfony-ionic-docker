#!/bin/bash
. "$(dirname "$0")"/script-utils

$DOCKER_COMPOSE run --user 1000 app bash -c "su application"