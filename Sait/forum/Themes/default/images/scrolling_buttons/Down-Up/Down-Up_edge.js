
(function(compId){var _=null,y=true,n=false,x14='Down1',x19='28px',x6='rgba(255,255,255,0.00)',x2='5.0.0',e23='${Down1}',x12='rgba(0,0,0,0)',lf='left',x1='5.0.1',g='image',h='height',e22='${Down2}',tp='top',x10='32px',o='opacity',x8='1',x15='0',x11='auto',x18='2px',x7='Down2',w='width',e21='${Down}',m='rect',x3='5.0.1.386',x9='0px',x17='Down',i='none';var g13='Up2.png',g4='Cable%20Tie%2001.wav',g20='Up.png',g16='Up1.png',g5='Nail%20Falls%20on%20Ground%2001.wav';var im='images/',aud='media/',vid='media/',js='js/',fonts={},opts={'gAudioPreloadPreference':'auto','gVideoPreloadPreference':'auto'},resources=[],scripts=[],symbols={"stage":{v:x1,mv:x2,b:x3,stf:i,cg:i,rI:n,cn:{dom:[{id:'Do_wn',symbolName:'Do_wn',t:m,r:['0','0','32','32','auto','auto'],cu:'pointer'},{id:'Cable_Tie_01',v:i,t:'audio',tag:'audio',r:['0','0','320px','45px','auto','auto'],sr:[aud+g4],pr:'auto'},{id:'Nail_Falls_on_Ground_01',v:i,t:'audio',tag:'audio',r:['0','0','320px','45px','auto','auto'],sr:[aud+g5],pr:'auto'}],style:{'${Stage}':{isStage:true,r:['null','null','32px','32px','auto','auto'],overflow:'hidden',f:[x6]}}},tt:{d:1000,a:y,l:{"Label":0},data:[]}},"Do_wn":{v:x1,mv:x2,b:x3,stf:i,cg:i,rI:n,cn:{dom:[{t:g,id:x7,o:x8,r:[x9,x9,x10,x10,x11,x11],f:[x12,im+g13,x9,x9]},{t:g,id:x14,o:x15,r:[x9,x9,x10,x10,x11,x11],f:[x12,im+g16,x9,x9]},{t:g,id:x17,o:x15,r:[x18,x18,x19,x19,x11,x11],f:[x12,im+g20,x9,x9]}],style:{'${symbolSelector}':{r:[_,_,x10,x10]}}},tt:{d:1000,a:y,l:{"Label_1":0,"Label_2":500,"Label_3":1000},data:[["eid12",o,500,500,"linear",e21,'0.000000','1'],["eid21",tp,0,995,"linear",e21,'2px','1px'],["eid2",o,0,500,"linear",e22,'1','0'],["eid18",h,0,995,"linear",e21,'28px','30px'],["eid20",lf,0,995,"linear",e21,'2px','1px'],["eid10",o,0,500,"linear",e23,'0.000000','1'],["eid17",o,500,500,"linear",e23,'1','0.008130081300813'],["eid19",w,0,995,"linear",e21,'28px','30px']]}}};AdobeEdge.registerCompositionDefn(compId,symbols,fonts,scripts,resources,opts);})("EDGE-17432800");
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;Edge.registerEventBinding(compId,function($){
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindElementAction(compId,symbolName,"${Do_wn}","mousedown",function(sym,e){sym.getSymbol("Do_wn").stop("Label_3");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${Do_wn}","mouseleave",function(sym,e){sym.getSymbol("Do_wn").stop("Label_1");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${Do_wn}","mouseenter",function(sym,e){sym.getSymbol("Do_wn").stop("Label_2");sym.$("Nail_Falls_on_Ground_01")[0].play("Label_2");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",0,function(sym,e){sym.getSymbol("Do_wn").stop("Label");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${Do_wn}","click",function(sym,e){sym.$("Cable_Tie_01")[0].play("Label_3");});
//Edge binding end
})("stage");
//Edge symbol end:'stage'

//=========================================================

//Edge symbol: 'Do_wn'
(function(symbolName){})("Do_wn");
//Edge symbol end:'Do_wn'
})})(AdobeEdge.$,AdobeEdge,"EDGE-17432800");