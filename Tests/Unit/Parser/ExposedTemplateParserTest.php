<?php
namespace FluidTYPO3\Builder\Tests\Unit\Parser;
use FluidTYPO3\Builder\Parser\ExposedTemplateParser;
use TYPO3\CMS\Core\Tests\UnitTestCase;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class ExposedTemplateParserTest
 */
class ExposedTemplateParserTest extends UnitTestCase {

	/**
	 * @param string $input
	 * @test
	 * @dataProvider getInvalidTemplateStringTestValues
	 */
	public function testParseThrowsExceptionOnInvalidTemplateString($input) {
		$parser = new ExposedTemplateParser();
		$this->setExpectedException('TYPO3\\CMS\\Fluid\\Core\\Parser\\Exception');
		$parser->parse($input);
	}

	/**
	 * @return array
	 */
	public function getInvalidTemplateStringTestValues() {
		return array(
			array(1),
			array(new \stdClass()),
			array(NULL),
			array(FALSE)
		);
	}

}
