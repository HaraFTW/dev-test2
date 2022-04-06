function solve(st, a, b) {
	var leftIndex = Math.min(a, b)
	var rightIndex = Math.max(a, b)
	if(leftIndex === rightIndex || leftIndex < 0 || rightIndex < 0 || rightIndex >= st.length)
		return st
	let reversable = st.substring(leftIndex, rightIndex + 1)
	let reversableSplit = reversable.split('')
	let reversableArray = reversableSplit.reverse()
	var reversed = reversableArray.join('')
	var leftString = ''
	var rightString = ''
	if(leftIndex == 0)
		if(rightIndex == st.length - 1)
			return reversed
		else
			rightString = st.substring(rightIndex + 1)
	else
	{
		leftString = st.substring(0, leftIndex)
		rightString = st.substring(rightIndex + 1)
	}

	return leftString + reversed + rightString
}