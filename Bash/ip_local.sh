#! /bin/bash

ifconfig | grep "inet" | grep "broadcast" | cut -d" " -f10 | tr " " "\n"
