<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SimpleThings\EntityAudit\Tests\Fixtures\Issue;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Issue196Entity
{
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="issue196type")
     */
    private $sqlConversionField;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setSqlConversionField(string $sqlConversionField): void
    {
        $this->sqlConversionField = $sqlConversionField;
    }

    public function getSqlConversionField(): ?string
    {
        return $this->sqlConversionField;
    }
}
