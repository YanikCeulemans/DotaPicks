#!/bin/sh
while read p; do
	curl -O $p
done < heroimages.txt
