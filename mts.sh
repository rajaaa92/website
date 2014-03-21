#!/bin/bash

echo "Copying files to the server..."

sudo rm -rf "/Library/WebServer/Documents/*"
sudo cp -r . "/Library/WebServer/Documents/"

echo "Done."
