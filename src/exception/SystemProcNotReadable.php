<?php

declare(strict_types=1);

namespace Light\System\Exception;

/**
 * Class SystemProcNotReadable
 * @package Light\System\Exception
 */
class SystemProcNotReadable extends \Exception
{
  /**
   * SystemProcNotReadable constructor.
   * @param string $proc
   */
  public function __construct(string $proc)
  {
    parent::__construct('SystemProcNotReadable: ' . $proc);
  }
}
