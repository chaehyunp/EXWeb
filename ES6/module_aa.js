function show(){
    //document.write("show");
    //모듈타입일때는 document.write() 사용못함
    //그래서 새로운 요소노드를 직접 만들어서 추가해야함
    const e= document.createElement('h4')
    e.textContent= "show"
    document.body.appendChild(e)
}

//다른 JS에서 show()를 import하게 하고 싶다면 반드시 내보내야함
//하나의  .js 안에서 여러 개를 export 할 수 있음, 그 중 반드시 1개는 default 키워드 필요

export default show //함수선언하면서 써도 되고 따로 써도 됨

//또다른 함수 export 해보기
//default가 없으면 함수선언하면서 export 명시
export function addTextToBody(message){
    const e = document.createElement('h4')
    e.textContent = message
    document.body.appendChild(e)
}

//변수나 상수도 export 가능
export const num = 100
export let age = 20

