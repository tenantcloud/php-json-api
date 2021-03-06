<?php

namespace Tests\AttributeContext;

use TenantCloud\JsonApi\AttributeContext\Page;
use Tests\TestCase;

/**
 * @see Page
 */
class PageTest extends TestCase
{
	public const DEFAULT_PAGE = 1;

	public function testSetAndGetPage(): void
	{
		$page = 2;

		$pageObj = new Page();
		$this->assertSame(self::DEFAULT_PAGE, $pageObj->getPage());

		$pageObj->setPage($page);
		$this->assertSame($page, $pageObj->getPage());
	}
}
