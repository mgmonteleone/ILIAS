<?php
/* Copyright (c) 1998-2013 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once 'Modules/TestQuestionPool/classes/class.ilAssHtmlPurifier.php';

/**
 * @author		Björn Heyser <bheyser@databay.de>
 * @version		$Id$
 *
 * @package     Modules/Test
 */
class ilAssHtmlUserSolutionPurifier extends ilAssHtmlPurifier
{
	const TYPE = 'qpl_usersolution';

	protected function getPurifierType()
	{
		return self::TYPE;
	}
} 