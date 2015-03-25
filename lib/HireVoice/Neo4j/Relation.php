<?php
/**
 * Copyright (C) 2012 Maximilian Ruta
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 */

namespace HireVoice\Neo4j;

/**
 * Class Relation
 *
 * @package HireVoice\Neo4j
 * @author Maximilian Ruta <mr@xtain.net>
 */
abstract class Relation
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var bool
     */
    protected $forceCreate = false;

    /**
     * @var object
     */
    protected $target;

    /**
     * @var array|false
     */
    protected $unique = false;

    /**
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * @var \DateTime
     */
    protected $updateDate;

    /**
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * set unique
     *
     * @param array|false $unique
     *
     * @return void
     * @author Markus Schnider <markus.schnider@apareoo.ch>
     */
    public function setUnique($unique)
    {
        if (is_bool($unique) || is_array($unique)) {
            $this->unique = $unique;
        }
    }

    /**
     * get unique
     *
     * @return array|false
     * @author Markus Schnider <markus.schnider@apareoo.ch>
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * @return object
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param object $target
     *
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @author Maximilian Ruta <mr@xtain.net>
     * @return array
     */
    public function getProperties()
    {
        return array();
    }

    /**
     * @param string $type
     *
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param bool $forceCreate
     *
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function setForceCreate($forceCreate)
    {
        $this->forceCreate = $forceCreate;
    }

    /**
     * @return bool
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function isForceCreate()
    {
        return $this->forceCreate;
    }

    /**
     * @return mixed
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function __toString()
    {
        return $this->type;
    }
}