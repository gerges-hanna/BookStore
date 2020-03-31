<?php


class Transaction {
  private $buyer_id;
  private $seller;
  private $amount;
  private $book;
  private $buyer_name;
  private $seller_name;
  
  function getBuyer_id() {
      return $this->buyer_id;
  }

  function getSeller() {
      return $this->seller;
  }

  function getAmount() {
      return $this->amount;
  }

  function getBook() {
      return $this->book;
  }

  function getBuyer_name() {
      return $this->buyer_name;
  }

  function getSeller_name() {
      return $this->seller_name;
  }

  function setBuyer_id($buyer_id) {
      $this->buyer_id = $buyer_id;
  }

  function setSeller($seller) {
      $this->seller = $seller;
  }

  function setAmount($amount) {
      $this->amount = $amount;
  }

  function setBook($book) {
      $this->book = $book;
  }

  function setBuyer_name($buyer_name) {
      $this->buyer_name = $buyer_name;
  }

  function setSeller_name($seller_name) {
      $this->seller_name = $seller_name;
  }


}
