## Usage Example

```php
use KaidaBy\MultiException;

function checkSomethingString($string): bool
{
    $exceptions = new MultiException();
    
    if (mb_strlen($string) < 6) {
        $exceptions->add(new Exception('The string must be longer than 6 characters'));
    }
    
    if (!is_string($string)) {
        $exceptions->add(new Exception('The input parameter should be a string'));
    }
    
    if (preg_match('%^\p{Lu}%u', $string)) {
        $exceptions->add(new Exception('The line must begin with a capital letter.'));
    }
    
    if (!$exceptions->isEmpty()) {
        throw $exceptions;
    }

    return true;
}

try {
    checkSomething($thing);
} catch (MultiException $exceptions) {
    foreach ($exceptions as $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }
}
```