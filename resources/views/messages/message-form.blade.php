<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/3/2019
 * Time: 2:15 PM
 */?>
@if(session()->has('message'))
    <div class="message is-success">
        <div class="message-body">
            {{ session()->get('message') }}
        </div>
    </div>
@endif
