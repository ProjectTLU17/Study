<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="bio">

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/0.8.2/purify.min.js"></script>
    <script type="text/javascript">
    function sanitize(strings,...values){
      const dirty = strings.reduce((prev, next, i) =>{
        console.log(values[i]);
        return `${prev}${next}${values[i] || '' } `;
      },'');
      console.log(dirty);
      return DOMPurify.sanitize(dirty);
    }
    const first = 'Wes';
    const aboutMe = `I love to do evil <img src="http://lorempixel.com/400/200/" onload="alert('you got hacked');" />`;
    // Cũng có thể dùng trực tiếp hàm DOMPurify.sanitize cho chuỗi luôn. Ở trên chỉ là ví dụ
  //  const aboutMe = DOMPurify.santize`I love to do evil <img src="http://lorempixel.com/400/200/" onload="alert('you got hacked');" />`;
    const html = sanitize`
        <h3>${first}</h3>
        <p>${aboutMe}</p>
      `;
    const bio = document.querySelector('.bio');
    bio.innerHTML = html;
    </script>
  </body>
</html>
