<?php

declare(strict_types=1);

namespace Plugin\jtl_test;

use JTL\Cron\Job;
use JTL\Cron\JobInterface;
use JTL\Cron\QueueEntry;

/**
 * Class TestCronJob
 * @package Plugin\jtl_test
 */
class TestCronJob extends Job
{
    /**
     * @return bool
     */
    private function test(): bool
    {
        return \random_int(0, 9) === 5;
    }

    /**
     * @inheritdoc
     */
    public function start(QueueEntry $queueEntry): JobInterface
    {
        parent::start($queueEntry);
        $this->logger->debug('Example cron job started');
        if (($res = $this->test()) === true) {
            $this->logger->debug('Example cron job finished.');
        } else {
            $this->logger->debug('Job did not finish yet.');
        }
        $this->setFinished($res);

        return $this;
    }
}
