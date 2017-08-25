<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proxies!</title>
  </head>
  <body>
    <script type="text/javascript">
      const person = { name: 'DUy', age: 100 };
      const personProxy = new Proxy( person, {
        get(target, name) {
          console.log('somone is asking for ', target, name);
          return 'Nahhhhh';
        }
      });
      personProxy.name = 'DuyLuong';

      const phoneHandler = {
        set(target, name, value) {
          target[name] = value.match(/[0-9]/g).join('');
        },
        get(target, name) {
          return target[name].replace(/(\d{3})(\d{3})(\d{4})/, '($1)-$2-$3');
        }
      }

      const phoneNumbers = new Proxy ({}, phoneHandler);

      const safeHandler = {
        set(target, name, value) {
          const likeKey = Object.keys(target).find(k => k.toLowerCase() === name.toLowerCase());
          if (!(name in target) && likeKey) {
            throw new Error(`Oops! Looks like like we already have a(n) ${name} property but with the case of ${likeKey}.`);
          }
          target[name] = value;
        }
      };
      const saftey = new Proxy({ id: 100 }, safeHandler);
      saftey.ID = 200;
    </script>
  </body>
</html>
