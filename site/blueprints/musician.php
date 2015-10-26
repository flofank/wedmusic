<?php if(!defined('KIRBY')) exit ?>

title: Musiker
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  tags:
    label: Keywords
    type:  tags
    separator: ,&nbsp;
  text:
    label: Text
    type:  textarea
