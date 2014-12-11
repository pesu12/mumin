<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletDatabase extends \Mos\Database\CDatabaseBasic
{
    /**
     * Constructor needed to call parent constructor.
     *
     * @return void
     *
     */
    public function __construct()
    {
        parent::__construct();
    }



    /**
    * My name is.
    *
    * @return string
    *
    */
    public function getName()
    {
        return "My Name is Mumintrollet.";
    }



    /**
     * My name is.
     *
     * @return string
     *
     */
    public function createTableTest()
    {
        $this->dropTableIfExists("test");
        $this->createTable(
            'test',
            [
                'id'    => ['integer', 'auto_increment', 'primary key', 'not null'],
                'age'   => ['integer'],
                'text'  => ['varchar(20)'],
            ]
        );
        return $this->execute();
    }



    /**
    * My name is.
    *
    * @return string
    *
    */
    public function getName1()
    {
        $db->insert(
            'test',
            ['age', 'text']
        );

        $db->execute($rows[0]);
    }
}
