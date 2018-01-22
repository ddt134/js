//把多维数组转换成FormData对象
function multiArrayToFormData(key, data, formData) {
	if(data.length===0){
		formData.append(key,[]);
	}else{
		for (var i in data) {
			if (typeof data[i] == 'object') {
				var nextKey=(key == '') ?i:key+'[' + i + ']';
				arguments.callee(nextKey, data[i], formData);
			} else {
				var thisKey = (key == '') ? i : key +'['+i+']';
				formData.append(thisKey, data[i]);
			}
		}
	}
	return formData;
}