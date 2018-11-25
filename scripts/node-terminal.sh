#!/bin/bash
. "$(dirname "$0")"/script-utils

$DOCKER_COMPOSE run --user 1000 frontend "$@"