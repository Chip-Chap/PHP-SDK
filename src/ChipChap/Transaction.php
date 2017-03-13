<?php
namespace ChipChap;

interface Transaction {
    function getId();
    function getCreated();
    function getUpdated();
    function getStatus();
    function getAmount();
    function getCurrency();
    function getScale();
    function getSubject();
    function getProvider();
}


