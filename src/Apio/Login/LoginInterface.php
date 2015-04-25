<?php

namespace Apio\Login;

interface LoginInterface {

    public function setUrl($url);

    public function setSecretKey($secretKey);

    public function setAppId($id);
    
    public function  setAccess($params);
    
    public function getAccess();

    public function getRequest();

    public function getResponse();
    
    public function getResponseTime();
    
   public function getRequestTime();
  
}