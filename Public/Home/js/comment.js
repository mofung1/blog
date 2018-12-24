 $(function() {
    //��õ�ǰ<ul>
    var $uList = $(".scroll-box ul");
    var timer = null;
    //������ն�ʱ��
    $uList.hover(function() {
        clearInterval(timer);
    },
    function() { //�뿪������ʱ��
        timer = setInterval(function() {
            scrollList($uList);
        },
        3000);
    }).trigger("mouseleave"); //�Զ����������¼�
    //��������
    function scrollList(obj) {
        //��õ�ǰ<li>�ĸ߶�
        var scrollHeight = $("ul li:first").height();
        //������һ��<li>�ĸ߶�
        $uList.stop().animate({
            marginTop: -scrollHeight
        },
        600,
        function() {
            //���������󣬽���ǰ<ul>marginTop��Ϊ��ʼֵ0״̬���ٽ���һ��<li>ƴ�ӵ�ĩβ��
            $uList.css({
                marginTop: 0
            }).find("li:first").appendTo($uList);
        });
    }
});