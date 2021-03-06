<?php
/*
 *    Copyright 2012-2016 Youzan, Inc.
 *
 *    Licensed under the Apache License, Version 2.0 (the "License");
 *    you may not use this file except in compliance with the License.
 *    You may obtain a copy of the License at
 *
 *        http://www.apache.org/licenses/LICENSE-2.0
 *
 *    Unless required by applicable law or agreed to in writing, software
 *    distributed under the License is distributed on an "AS IS" BASIS,
 *    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *    See the License for the specific language governing permissions and
 *    limitations under the License.
 */

namespace Zan\Framework\Network\Http;

use Zan\Framework\Foundation\Coroutine\Context;
use Zan\Framework\Foundation\Exception\System\InvalidArgument;

class ContextBuilder {
    
    private $context = null;

    public function __construct(Context $context) {
        if(!$context) {
            throw new InvalidArgument('invalid context for ContextBuilder');
        }

        $this->context = $context;
    }

    public function build() {
        $this->dobuilding();

        return $this->context;
    }


    private function doBuilding() {

    }
}