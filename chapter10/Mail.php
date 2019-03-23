<?php

    class Mail {
        //to(宛先)　subject(件名)　message(本文)　プロパティを定義
        public $to;
        public $subject;
        public $message;
        //その他ヘッダー情報を格納するための連想配列
        private $headers = [];

        public function __set($name, $value) {
            $this->headers[$name] = $value;
        }

        public function __get($name) {
            return $this -> headers[$name];
        }

        public function send() {
            foreach ($this->headers as $key => $value) {
                $key = str_replace('_', '-', $key);
                $others .= "{$key}: {$value}\n";
            }
            mb_send_mail($this->to, $this->subject, $this->message, $others);
        }
    }