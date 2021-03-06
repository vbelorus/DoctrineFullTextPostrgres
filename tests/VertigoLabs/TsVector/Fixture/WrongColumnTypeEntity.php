<?php
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 * @copyright:
 * @date: 9/18/2015
 * @time: 3:12 PM
 */

namespace TsVector\Fixture;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use VertigoLabs\DoctrineFullTextPostgres\ORM\Mapping\TsVector;

/**
 * @package VertigoLabs\TsVector\Fixture
 * @Entity()
 */
class WrongColumnTypeEntity
{
	/**
	 * @var integer
	 * @Id()
	 * @Column(name="id", type="integer", nullable=false)
	 */
	private $id;
	/**
	 * @Column(type="integer", nullable=true)
	 */
	private $wrongColumnType;
	/**
	 * @TsVector(fields={"wrongColumnType"})
	 */
	private $wrongColumnTypeFTS;
}