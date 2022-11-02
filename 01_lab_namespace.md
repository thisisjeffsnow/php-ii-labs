## Lab: Namespace
---

Have a look at the OrderApp in the course VM.

1. Identify the namespaces used.

---

Answer: 

- Several namespaces were located having this common root:
```
~Zend/workspaces/DefaultWorkspace/orderapp/src/OrderApp/
```
```
  namespace OrderApp\Controller;
  Location: Controller/IndexController.php
```
``` 
  namespace OrderApp\Core\Controller;
  Location: Core/Controller/AbstractController.php
```
```
  namespace OrderApp\Core\Db;
  Location: Core/Db/AbstractModel.php
  Location: Core/Db/Db.php
  Location: Core/Db/ModelException.php
  Location: Core/Db/ModelInterface.php
```
```
  namespace OrderApp\Core\Form;
  Location: Core/Form/Form.php
```
```
  namespace OrderApp\Core\Form\Inputs;
  Location: Core/Form/Inputs/BaseInput.php
  Location: Core/Form/Inputs/Checkbox.php
  Location: Core/Form/Inputs/Hidden.php
  Location: Core/Form/Inputs/InputInterface.php
  Location: Core/Form/Inputs/Password.php
  Location: Core/Form/Inputs/Select.php
  Location: Core/Form/Inputs/SelectAssoc.php
  Location: Core/Form/Inputs/Submit.php
  Location: Core/Form/Inputs/Text.php
  Location: Core/Form/Inputs/Textarea.php
```
```
  namespace OrderApp\Core\Html;
  Location: Core/Html/GlobalHtmlAtt.php
```
```
  namespace OrderApp\Core\Messaging;
  Location: Core/Messaging/Messenger.php
```
```
  namespace OrderApp\Core\Service;
  Location: Core/Service/ServiceInterface.php
  Location: Core/Service/Services.php
```
```
  namespace OrderApp\Core\Traits;
  Location: Core/Traits/MessageTrait.php
```
```
  namespace OrderApp\Core\Validator;
  Location: Core/Validator/Alnum.php
  Location: Core/Validator/Alpha.php
  Location: Core/Validator/Boolean.php
  Location: Core/Validator/Digit.php
  Location: Core/Validator/InArray.php
  Location: Core/Validator/IsNull.php
  Location: Core/Validator/Null.php
  Location: Core/Validator/Required.php
  Location: Core/Validator/StringLength.php
  Location: Core/Validator/ValidatorInterface.php
```
```
  namespace OrderApp\Core\View;
  Location: Core/View/View.php
```
```
  namespace OrderApp\Domain;
  Location: Domain/Domain.php
```
```
  namespace OrderApp\Form;
  Location: Form/AddOrderForm.php
  Location: Form/OrderForm.php
```
```
  namespace OrderApp\Model;
  Location: Model/CustomersModel.php
  Location: Model/OrdersModel.php
```
```
  namespace OrderApp\Service;
  Location: Service/DomainService.php
```

- More namespaces were located with this common root:
```
~Zend/workspaces/DefaultWorkspace/orderapp/vendor/
```
```
  namespace Composer\Autoload;
  Location: composer/autoload_static.php
  Location: composer/ClassLoader.php	
```
```
  namespace Composer;
  Location: composer/InstalledVersions.php
```
```
  namespace GuzzleHttp;
  Location: guzzlehttp/guzzle/src/*
```
```
  namespace GuzzleHttp/Cookie;
  Location: guzzlehttp/guzzle/src/Cookie/*
```
```
  namespace GuzzleHttp\Exception;
  Location: guzzlehttp/guzzle/src/Exception/*
```
```
  namespace GuzzleHttp\Handler;
  Location: guzzlehttp/guzzle/src/Handler/*
```
```
  namespace GuzzleHttp\Promise;
  Location: guzzlehttp/promises/src/*
```
```
  namespace GuzzleHttp\Psr7;
  Location: guzzlehttp/psr7/src/*
```
```
  namespace Monolog;
  Location: monolog/monolog/src/Monolog/*
```
```
  namespace Monolog\Formatter;
  Location: monolog/monolog/src/Monolog/Formatter/*
```
```
  namespace Monolog\Handler;
  Location: monolog/monolog/src/Monolog/Handler/*
```
```
  namespace Monolog\Handler\Curl;
  Location: monolog/monolog/src/Monolog/Handler/Curl/*
```
```
  namespace Monolog\Handler\FingersCrossed;
  Location: monolog/monolog/src/Monolog/Handler/FingersCrossed/*
```
```
  namespace Monolog\Handler\Slack;
  Location: monolog/monolog/src/Monolog/Handler/Slack/*
```
```
  namespace Monolog\Handler\SyslogUdp;
  Location: monolog/monolog/src/Monolog/Handler/SyslogUdp/*
```
```
  namespace Monolog\Processor;
  Location: monolog/monolog/src/Monolog/Processor/*	
```
```
  namespace Monolog\Test;
  Location: monolog/monolog/src/Monolog/Test/*
```
```
  namespace Psr\Http\Client;
  Location: psr/http-client/src/*
```
```
  namespace Psr\Http\Message;
  Location: psr/http-message/src/*
```
```
  namespace Psr\Log;
  Location: psr/log/Psr/Log/*
```
```
  namespace Psr\Log\Test;
  Location: psr/log/Psr/Log/Test/*
```

---

2. How is autoloading initiated?

---

Answer:

```
~Zend/workspaces/DefaultWorkspace/orderapp/public/index.php
```
index.php defines the constant BASE to
```
~Zend/workspaces/DefaultWorkspace/orderapp/
```
and then passes the anonymous
function below to spl_autoload_register():
```
  function ($class) {
      $file = str_replace('\\', '/', $class) . '.php';
      require BASE . '/src/' . $file;
  }
```
With this autoloader, a class X\Y\Z for example, is parsed into
```
$file = 'X/Y/Z.php';
```
and then loaded by:
```
require '~Zend/workspaces/DefaultWorkspace/orderapp/src/X/Y/Z.php';
```

The classes in the vendor folder like Guzzle and Monolog do not appear that
they would be autoloaded because the composer autoloader is commented out:
```
  //require '../vendor/autoload.php';
  /**
  * @todo: revise this
  */
```