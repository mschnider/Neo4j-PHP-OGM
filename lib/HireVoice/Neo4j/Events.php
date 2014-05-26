<?php
/**
 * Copyright (C) 2012 Louis-Philippe Huberdeau
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

final class Events
{
    /**
     * @var string
     */
    const postPersist = 'postPersist';

    /**
     * @var string
     */
    const postRelationCreate = 'postRelationCreate';

    /**
     * @var string
     */
    const postRelationRemove = 'postRelationRemove';

    /**
     * @var string
     */
    const postRelationUpdate = 'postRelationUpdate';

    /**
     * @var string
     */
    const postRemove = 'postRemove';

    /**
     * @var string
     */
    const postStmtExecute = 'postStmtExecute';

    /**
     * @var string
     */
    const prePresist = 'prePresist';

    /**
     * @var string
     */
    const preRelationCreate = 'preRelationCreate';

    /**
     * @var string
     */
    const preRelationUpdate = 'preRelationUpdate';

    /**
     * @var string
     */
    const preRelationRemove = 'preRelationRemove';

    /**
     * @var string
     */
    const preRemove = 'preRemove';

    /**
     * @var string
     */
    const preStmtExecute = 'preStmtExecute';

}

