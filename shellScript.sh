#!/bin/bash

for file in filesByShellScript/*
do
  if [[ -f $file ]]; then
    prefix=$(echo $file | cut -d'-' -f1)
    mkdir -p $prefix
    mv $file $prefix/
  fi
done