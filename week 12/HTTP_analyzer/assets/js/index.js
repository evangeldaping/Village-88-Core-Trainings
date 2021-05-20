$(document).ready(function(){
    var parser = new DOMParser();
    $("form").on("submit", function(e){
        e.preventDefault();
        $.post("analyzer/parseUrl",$(this).serialize(), function(data){
            var html = parser.parseFromString(data,'text/html');
            var tags= Array.from(html.getElementsByTagName("*"));
            var elements = tags.reduce(function(tag,element){
                tag[element.nodeName] = (tag[element.nodeName] || 0) + 1;
                return tag;
                },{});
            for(key in elements) {
                $("tbody").append(`
                    <tr>
                        <th>${key.toLowerCase()}</th>
                        <th>${elements[key]}</th>
                    </tr>
                `);
            }
            $(".source div").text(data);
        })
    })
})