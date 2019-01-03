<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/3/2019
 * Time: 2:14 PM
 */?>
@if($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
