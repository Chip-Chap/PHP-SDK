<?php
namespace ChipChap;

interface Account {
    function getId();
    function getName();
    function getEmail();
    function getTier();
}
