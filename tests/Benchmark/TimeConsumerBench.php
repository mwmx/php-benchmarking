// tests/Benchmark/TimeConsumerBench.php
namespace Acme\Tests\Benchmark;

use Acme\TimeConsumer;

class TimeConsumerBench
{
    public function benchConsume()
    {
        $consumer = new TimeConsumer();
        $consumer->consume();
    }
}
