let q = 1
let gameMap = [
  [
	  [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
    [1,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,1],
    [1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1],
    [1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1],
    [1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1],
    [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1],
    [1,0,1,1,1,1,0,1,1,0,1,1,1,1,1,1,1,1,0,1,1,0,1,1,1,1,0,1],
    [1,0,0,0,0,0,0,1,1,0,1,1,1,1,1,1,1,1,0,1,1,0,0,0,0,0,0,1],
    [1,1,1,1,1,1,0,1,1,0,0,0,0,1,1,0,0,0,0,1,1,0,1,1,1,1,1,1],
    [3,3,3,3,3,1,0,1,1,1,1,1,3,1,1,3,1,1,1,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [1,1,1,1,1,1,0,1,1,3,3,1,1,3,3,1,1,3,3,1,1,0,1,1,1,1,1,1],
    [3,3,3,3,3,3,0,3,3,3,3,1,3,4,3,3,1,3,3,3,3,0,3,3,3,3,3,3],
    [1,1,1,1,1,1,0,1,1,3,3,1,1,1,1,1,1,3,3,1,1,0,1,1,1,1,1,1],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,1,1,1,1,1,1,1,1,3,1,1,0,1,3,3,3,3,3],
    [1,1,1,1,1,1,0,1,1,3,1,1,1,1,1,1,1,1,3,1,1,0,1,1,1,1,1,1],
    [1,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,1],    
    [1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1],
    [1,0,1,1,1,1,0,1,1,1,1,1,0,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1],
    [1,0,0,0,1,1,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,1,1,0,0,0,1],
    [1,1,1,0,1,1,0,1,1,0,1,1,1,1,1,1,1,1,0,1,1,0,1,1,0,1,1,1],
    [1,1,1,0,1,1,0,1,1,0,1,1,1,1,1,1,1,1,0,1,1,0,1,1,0,1,1,1],
    [1,0,0,0,0,0,0,1,1,0,0,0,0,1,1,0,0,0,0,1,1,0,0,0,0,0,0,1],
    [1,0,1,1,1,1,1,1,1,1,1,1,0,1,1,0,1,1,1,1,1,1,1,1,1,1,0,1],
    [1,0,1,1,1,1,1,1,1,1,1,1,0,1,1,0,1,1,1,1,1,1,1,1,1,1,0,1],
    [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1],
    [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1]
  ],
  [           
    [5,5,5,5,5,5,5,5,5,3,5,5,5,5,5,5,5,5,3,5,5,5,5,5,5,5,5,5],
    [5,0,5,5,5,5,0,5,5,5,5,5,0,5,5,0,5,5,5,5,5,0,5,5,5,5,0,5],
    [5,0,0,0,0,0,0,5,5,0,0,0,0,5,5,0,0,0,0,5,5,0,0,0,0,0,0,5],
    [5,0,0,0,0,0,0,0,0,0,0,0,0,5,5,0,0,0,0,0,0,0,0,0,0,0,0,5],
    [3,3,3,3,3,3,0,3,3,3,3,5,3,3,3,3,5,3,3,3,3,0,3,3,3,3,3,3],
    [5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5],
    [5,5,5,5,5,5,0,5,5,0,0,0,0,5,5,0,0,0,0,5,5,0,5,5,5,5,5,5],
    [3,3,3,3,3,3,0,5,5,0,3,3,3,3,3,3,3,3,0,5,5,0,3,3,3,3,3,3],
    [5,5,5,0,5,5,0,5,5,0,5,5,3,5,5,3,5,5,0,5,5,0,5,5,0,5,5,5],
    [3,3,3,3,3,5,0,5,5,5,5,5,3,5,5,3,5,5,5,5,5,0,5,3,3,3,3,3],
    [3,3,3,3,3,5,0,5,5,0,3,3,3,3,3,3,3,3,0,5,5,0,5,3,3,3,3,3],
    [3,3,3,3,3,5,0,5,5,0,3,3,3,3,3,3,3,3,0,5,5,0,5,3,3,3,3,3],
    [5,5,5,5,5,5,0,5,5,0,3,5,5,3,3,5,5,3,0,5,5,0,5,5,5,5,5,5],
    [3,3,3,3,3,3,0,3,3,0,3,5,3,4,3,3,5,3,0,3,3,0,3,3,3,3,3,3],
    [5,5,5,5,5,5,0,5,5,0,3,5,5,5,5,5,5,3,0,5,5,0,5,5,5,5,5,5],
    [3,3,3,3,3,5,0,5,5,0,3,3,3,3,3,3,3,3,0,5,5,0,5,3,3,3,3,3],
    [3,3,3,3,3,5,0,5,5,0,3,3,3,3,3,3,3,3,0,5,5,0,5,3,3,3,3,3],
    [3,3,3,3,3,5,0,5,5,0,5,5,5,5,5,5,5,5,0,5,5,0,5,3,3,3,3,3],
    [5,5,5,5,5,5,0,5,5,0,5,5,5,5,5,5,5,5,0,5,5,0,5,5,5,5,5,5],
    [5,5,5,5,5,5,0,5,5,0,5,5,5,5,5,5,5,5,0,5,5,0,5,5,5,5,5,5],
    [5,0,0,0,0,0,0,0,0,0,0,0,0,5,5,0,0,0,0,0,0,0,0,0,0,0,0,5],
    [5,0,5,5,5,5,0,5,5,5,5,5,0,5,5,0,5,5,5,5,5,0,5,5,5,5,0,5],
    [5,0,0,0,5,5,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,5,5,0,0,0,5],
    [5,0,5,5,5,5,0,5,5,5,5,5,0,5,5,0,5,5,5,5,5,0,5,5,5,5,0,5],
    [5,0,5,5,5,5,0,5,5,5,5,5,0,5,5,0,5,5,5,5,5,0,5,5,5,5,0,5],
    [3,3,3,3,3,3,0,5,5,3,3,3,3,3,3,3,3,3,3,5,5,0,3,3,3,3,3,3],
    [5,5,5,5,5,5,0,5,5,5,5,5,5,5,5,5,5,5,5,5,5,0,5,5,5,5,5,5],
    [3,3,3,3,3,3,0,5,5,3,3,3,3,3,3,3,3,3,3,5,5,0,3,3,3,3,3,3],
    [5,0,5,5,5,5,0,5,5,5,5,5,0,5,5,0,5,5,5,5,5,0,5,5,5,5,0,5],
    [5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5],
  ],
  [
	  [6,0,0,0,6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,6,6,0,0,0,6],
    [3,3,3,3,3,6,0,6,6,6,6,6,3,6,6,3,6,6,6,6,6,0,6,3,3,3,3,3],
    [6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,6],
    [6,6,6,6,6,6,0,6,6,3,6,6,6,6,6,6,6,6,3,6,6,0,6,6,6,6,6,6],
    [6,6,6,6,6,6,0,6,6,3,3,6,6,3,3,6,6,3,3,6,6,0,6,6,6,6,6,6],
    [6,0,6,6,6,6,0,6,6,6,6,6,0,6,6,0,6,6,6,6,6,0,6,6,6,6,0,6],
    [3,3,3,3,3,3,0,3,3,3,3,6,3,0,0,3,6,3,3,3,3,0,3,3,3,3,3,3],
    [3,3,3,3,3,3,0,3,3,3,3,6,3,0,0,3,6,3,3,3,3,0,3,3,3,3,3,3],
    [1,1,1,1,1,1,0,1,1,0,0,0,0,1,1,0,0,0,0,1,1,0,1,1,1,1,1,1],
    [3,3,3,3,3,1,0,1,1,1,1,1,3,1,1,3,1,1,1,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [1,1,1,1,1,1,0,1,1,3,3,1,1,3,3,1,1,3,3,1,1,0,1,1,1,1,1,1],
    [3,3,3,3,3,3,0,3,3,3,3,1,3,4,3,3,1,3,3,3,3,0,3,3,3,3,3,3],
    [1,1,1,1,1,1,0,1,1,3,3,1,1,1,1,1,1,3,3,1,1,0,1,1,1,1,1,1],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,3,3,3,3,3,3,3,3,3,1,1,0,1,3,3,3,3,3],
    [3,3,3,3,3,1,0,1,1,3,1,1,1,1,1,1,1,1,3,1,1,0,1,3,3,3,3,3],
    [1,1,1,1,1,1,0,1,1,3,1,1,1,1,1,1,1,1,3,1,1,0,1,1,1,1,1,1],
    [1,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,1],
    [6,0,0,0,6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,6,6,0,0,0,6],
    [6,6,6,6,6,6,0,6,6,0,0,6,6,6,6,6,6,0,0,6,6,0,6,6,6,6,6,6],
    [3,3,3,3,3,6,0,6,6,0,0,0,0,2,0,0,0,0,0,6,6,0,6,3,3,3,3,3],
    [3,3,3,3,3,6,0,6,6,0,0,0,0,0,0,0,0,0,0,6,6,0,6,3,3,3,3,3],
    [3,3,3,3,3,6,0,6,6,0,0,0,0,0,0,0,0,0,0,6,6,0,6,3,3,3,3,3],
    [6,6,6,6,6,6,0,6,6,0,0,6,6,6,6,6,6,0,0,6,6,0,6,6,6,6,6,6],
    [3,0,0,0,0,6,0,6,6,0,0,0,0,0,0,0,0,0,0,6,6,0,6,0,0,0,0,3],
    [6,6,6,0,6,6,0,6,6,0,6,6,6,6,6,6,6,6,0,6,6,0,6,6,0,6,6,6],
    [6,0,0,0,6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,6,6,0,0,0,6],
    [3,3,3,3,3,3,0,6,6,3,6,6,6,6,6,6,6,6,3,6,6,0,3,3,3,3,3,3],
  ],
  [
    [7,0,7,7,7,7,0,7,7,0,7,7,7,7,7,7,7,7,0,7,7,0,7,7,7,7,0,7],
    [7,0,0,0,0,0,0,7,7,0,7,7,7,7,7,7,7,7,0,7,7,0,0,0,0,0,0,7],
    [7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7],
    [3,3,3,3,3,7,0,7,7,3,3,3,3,3,3,3,3,3,3,7,7,0,7,3,3,3,3,3],
    [3,3,3,3,3,7,0,7,7,3,7,7,7,7,7,7,7,7,3,7,7,0,7,3,3,3,3,3],
    [7,0,7,7,7,7,0,7,7,7,7,7,0,7,7,0,7,7,7,7,7,0,7,7,7,7,0,7],
    [7,7,7,7,7,7,0,7,7,3,3,7,7,7,7,7,7,3,3,7,7,0,7,7,7,7,7,7],
    [7,0,0,0,0,0,0,0,0,0,0,0,0,7,7,0,0,0,0,0,0,0,0,0,0,0,0,7],
    [3,3,3,3,3,7,0,7,7,0,0,0,0,0,0,0,0,0,0,7,7,0,7,3,3,3,3,3],
    [3,3,3,3,3,7,0,7,7,7,7,7,0,7,7,0,7,7,7,7,7,0,7,3,3,3,3,3],
    [3,3,3,3,3,7,0,7,7,0,0,0,0,0,0,0,0,0,0,7,7,0,7,3,3,3,3,3],
    [3,3,3,3,3,7,0,7,7,0,3,3,3,3,3,3,3,3,0,7,7,0,7,3,3,3,3,3],
    [7,7,7,7,7,7,0,7,7,0,3,7,7,3,3,7,7,3,0,7,7,0,7,7,7,7,7,7],
    [3,3,3,3,3,3,0,3,3,0,3,7,3,4,3,3,7,3,0,3,3,0,3,3,3,3,3,3],
    [7,7,7,7,7,7,0,7,7,0,3,7,7,7,7,7,7,3,0,7,7,0,7,7,7,7,7,7],
    [3,3,3,3,3,7,0,7,7,0,3,3,3,3,3,3,3,3,0,7,7,0,7,3,3,3,3,3],
    [3,3,3,3,3,7,0,7,7,0,3,3,3,3,3,3,3,3,0,7,7,0,7,3,3,3,3,3],
    [3,3,3,3,3,7,0,7,7,0,7,7,7,7,7,7,7,7,0,7,7,0,7,3,3,3,3,3],
    [7,7,7,7,7,7,0,7,7,0,7,7,7,7,7,7,7,7,0,7,7,0,7,7,7,7,7,7],
    [7,7,7,7,7,7,0,7,7,0,7,7,7,7,7,7,7,7,0,7,7,0,7,7,7,7,7,7],
    [7,0,7,7,7,7,0,7,7,0,7,7,0,7,7,0,7,7,0,7,7,0,7,7,7,7,0,7],
    [7,0,7,7,7,7,0,7,7,0,7,7,0,7,7,0,7,7,0,7,7,0,7,7,7,7,0,7],
    [7,0,0,0,7,7,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,7,7,0,0,0,7],
    [7,0,0,0,0,0,0,7,7,0,0,0,0,7,7,0,0,0,0,7,7,0,0,0,0,0,0,7],
    [3,3,3,3,3,7,0,7,7,3,3,3,3,3,3,3,3,3,3,7,7,0,7,3,3,3,3,3],
    [3,3,3,3,3,7,0,7,7,7,7,7,3,7,7,3,7,7,7,7,7,0,7,3,3,3,3,3],
    [7,3,7,7,7,7,0,7,7,7,7,7,0,7,7,0,7,7,7,7,7,0,7,7,7,7,3,7],
    [7,7,7,7,7,7,0,7,7,3,3,7,7,3,3,7,7,3,3,7,7,0,7,7,7,7,7,7],
    [7,7,7,7,7,7,0,7,7,7,7,7,7,7,7,7,7,7,7,7,7,0,7,7,7,7,7,7],
    [7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7],
  ],
  [ 
    [8,8,8,8,8,8,0,8,8,3,8,8,8,8,8,8,8,8,3,8,8,0,8,8,8,8,8,8],
    [8,0,0,0,8,8,0,8,8,0,8,8,8,8,8,8,8,8,0,8,8,0,8,8,0,0,0,8],
    [8,0,8,8,8,8,0,8,8,0,8,8,0,8,8,0,8,8,0,8,8,0,8,8,8,8,0,8],
    [3,3,3,3,3,3,0,3,3,0,3,3,3,3,3,3,3,3,0,3,3,0,3,3,3,3,3,3],
    [3,3,3,3,3,3,0,8,8,0,8,8,3,8,8,3,8,8,0,8,8,0,3,3,3,3,3,3],
    [8,3,8,8,8,8,0,8,8,0,8,8,3,8,8,3,8,8,0,8,8,0,8,8,8,8,3,8],
    [8,3,8,8,8,8,0,8,8,0,8,8,3,8,8,3,8,8,0,8,8,0,8,8,8,8,3,8],
    [8,8,8,8,8,8,0,8,8,0,8,8,3,8,8,3,8,8,0,8,8,0,8,8,8,8,8,8],
    [8,8,8,8,8,8,0,8,8,0,8,8,3,8,8,3,8,8,0,8,8,0,8,8,8,8,8,8],
    [3,3,3,3,3,8,0,8,8,0,8,8,3,8,8,3,8,8,0,8,8,0,8,3,3,3,3,3],
    [3,3,3,3,3,8,0,8,8,0,3,3,3,3,3,3,3,3,0,8,8,0,8,3,3,3,3,3],
    [3,3,3,3,3,8,0,8,8,0,3,3,3,3,3,3,3,3,0,8,8,0,8,3,3,3,3,3],
    [8,8,8,8,8,8,0,8,8,0,3,8,8,3,3,8,8,3,0,8,8,0,8,8,8,8,8,8],
    [3,3,3,3,3,3,0,0,0,0,3,8,3,4,3,3,8,3,0,3,3,0,3,3,3,3,3,3],
    [8,8,8,8,8,8,0,8,8,0,3,8,8,8,8,8,8,3,0,8,8,0,8,8,8,8,8,8],
    [3,3,3,3,3,8,0,8,8,0,0,0,0,0,0,0,0,0,0,8,8,0,8,3,3,3,3,3],
    [3,3,3,3,3,8,0,8,8,0,0,0,0,0,0,0,0,0,0,8,8,0,8,3,3,3,3,3],
    [3,3,3,3,3,8,0,8,8,0,8,8,8,8,8,8,8,8,0,8,8,0,8,3,3,3,3,3],
    [8,8,8,8,8,8,0,8,8,0,8,8,8,8,8,8,8,8,0,8,8,0,8,8,8,8,8,8],
    [8,0,8,8,8,8,0,8,8,0,8,8,0,8,8,0,8,8,0,8,8,0,8,8,8,8,0,8],
    [8,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,8],
    [3,0,0,0,0,8,0,8,8,3,8,8,8,8,8,8,8,8,3,8,8,0,8,0,0,0,0,3],
    [8,0,0,0,8,8,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,8,8,0,0,0,8],
    [8,0,8,8,8,8,0,8,8,8,8,8,0,8,8,0,8,8,8,8,8,0,8,8,8,8,0,8],
    [8,0,0,0,8,8,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,8,8,0,0,0,8],
    [8,8,8,8,8,8,0,8,8,0,0,0,0,8,8,0,0,0,0,8,8,0,8,8,8,8,8,8],
    [3,3,3,3,3,3,0,8,8,0,0,0,0,0,0,0,0,0,0,8,8,0,3,3,3,3,3,3],
    [8,0,8,8,8,8,0,8,8,8,8,8,0,8,8,0,8,8,8,8,8,0,8,8,8,8,0,8],
    [8,0,8,0,8,8,0,8,8,3,8,8,8,8,8,8,8,8,3,8,8,0,8,8,0,8,0,8],
    [8,0,0,0,0,0,0,8,8,8,8,8,3,8,8,3,8,8,8,8,8,0,0,0,0,0,0,8],
  ]
];

let level = 0;

let position = {
  x:13,
  y:22
};

let purpleGhost= {
  x:13,
  y:13
}

let gameStarted = false;
let temp = 3;
let lastSquare = 3;
let move = 0;
let moveOptions = ["up", "down", "left", "right"]
let currentMove = 0;//Math.floor(Math.random(4 - 0) * 4);

let optionOneX;
let optionOneY;
let optionTwoX;
let optionTwoY;
let optionThreeX;
let optionThreeY;
let optionFourX;
let optionFourY;

let ghostMove = function() {
  //Use moves + custom blocks to spell pacman across the middle P****n Pa**an Pacman || P***** Pa**** Pac*** Pacm** Pacma*
  let tempWant = "";
  let tempWant2 = "";
  let xWant = position.x - purpleGhost.x
  let yWant = position.y - purpleGhost.y
  if (Math.abs(xWant) >= Math.abs(yWant)) {
    if (xWant < 0) {
      // set left for 1
      optionOneX = purpleGhost.x-1
      optionOneY = purpleGhost.y
      tempWant = "left"
      // if (yWant < 0) set up else down for 2 
      if (yWant < 0) {
        optionTwoX = purpleGhost.x
        optionTwoY = purpleGhost.y-1
        tempWant2 = "up"        
      } else {
        optionTwoX = purpleGhost.x
        optionTwoY = purpleGhost.y+1
        tempWant2 = "down"    
      }
      //set right for 3
      optionThreeX = purpleGhost.x+1
      optionThreeY = purpleGhost.y
      //set down else up for 4  
      if (optionTwoY === purpleGhost.y-1) {
        optionFourX = purpleGhost.x
        optionFourY = purpleGhost.y+1  
      } else {
        optionFourX = purpleGhost.x
        optionFourY = purpleGhost.y-1
      }
    } else {
      // set right for 1
      optionOneX = purpleGhost.x+1
      optionOneY = purpleGhost.y
      tempWant = "right"
      // if (yWant < 0) set up else down for 2 
      if (yWant < 0) {
        optionTwoX = purpleGhost.x
        optionTwoY = purpleGhost.y-1
        tempWant2 = "up"         
      } else {
        optionTwoX = purpleGhost.x
        optionTwoY = purpleGhost.y+1
        tempWant2 = "down"    
      }
      //set left for 3
      optionThreeX = purpleGhost.x-1
      optionThreeY = purpleGhost.y
      //set down else up for 4  
      if (optionTwoY === purpleGhost.y-1) {
        optionFourX = purpleGhost.x
        optionFourY = purpleGhost.y+1  
      } else {
        optionFourX = purpleGhost.x
        optionFourY = purpleGhost.y-1
      }
    }
  } else {
    if (yWant < 0) {
      // set up for 1
      optionOneX = purpleGhost.x
      optionOneY = purpleGhost.y-1
      tempWant = "up"
      // if (xWant < 0) set left else right for 2
      if (xWant < 0) {
        optionTwoX = purpleGhost.x-1
        optionTwoY = purpleGhost.y
        tempWant2 = "left"         
      } else {
        optionTwoX = purpleGhost.x+1
        optionTwoY = purpleGhost.y 
        tempWant2 = "right"   
      }
      // set down for 3
      optionThreeX = purpleGhost.x
      optionThreeY = purpleGhost.y+1
      // set right else left for 4 
      if (optionTwoX === purpleGhost.x-1) {
        optionFourX = purpleGhost.x+1
        optionFourY = purpleGhost.y  
      } else {
        optionFourX = purpleGhost.x-1
        optionFourY = purpleGhost.y
      }
    } else {
      // set down for 1
      optionOneX = purpleGhost.x
      optionOneY = purpleGhost.y+1
      tempWant = "down"
      // if (xWant < 0) set left else right for 2 
      if (xWant < 0) {
        optionTwoX = purpleGhost.x+1
        optionTwoY = purpleGhost.y   
        tempWant2 = "left"       
      } else {
        optionTwoX = purpleGhost.x-1
        optionTwoY = purpleGhost.y  
        tempWant2 = "right"   
      }
      // set up for 3
      optionThreeX = purpleGhost.x
      optionThreeY = purpleGhost.y-1      
      // set right else left for 4 
      if (optionTwoX === purpleGhost.x-1) {
        optionFourX = purpleGhost.x+1
        optionFourY = purpleGhost.y  
      } else {
        optionFourX = purpleGhost.x-1
        optionFourY = purpleGhost.y
      }
    }
  }
  
  if (move <= 1) {
    temp = gameMapCopy[purpleGhost.y-1][purpleGhost.x]
    gameMapCopy[purpleGhost.y-1][purpleGhost.x] = 4;
    gameMapCopy[purpleGhost.y][purpleGhost.x] = lastSquare;
    purpleGhost.y = purpleGhost.y-1;
    move++;
  } else if (move === 2) {
    temp = gameMapCopy[purpleGhost.y][purpleGhost.x-1]
    gameMapCopy[purpleGhost.y][purpleGhost.x-1] = 4;
    gameMapCopy[purpleGhost.y][purpleGhost.x] = lastSquare;
    purpleGhost.x = purpleGhost.x-1;
    gameMapCopy[12][13] = 1;
    gameMapCopy[12][14] = 1;
    move++;
  } else {    
      gameMapCopy[purpleGhost.y-1][purpleGhost.x] !== 1 && 
      gameMapCopy[purpleGhost.y-1][purpleGhost.x] !== 5 &&
      gameMapCopy[purpleGhost.y-1][purpleGhost.x] !== 6 &&
      gameMapCopy[purpleGhost.y-1][purpleGhost.x] !== 7 &&
      gameMapCopy[purpleGhost.y-1][purpleGhost.x] !== 8
      //(gameMapCopy[purpleGhost.y][purpleGhost.x+1] === undefined)
      
      if (gameMapCopy[optionOneY][optionOneX] !== 1 && 
        gameMapCopy[optionOneY][optionOneX] !== 5 &&
        gameMapCopy[optionOneY][optionOneX] !== 6 &&
        gameMapCopy[optionOneY][optionOneX] !== 7 &&
        gameMapCopy[optionOneY][optionOneX] !== 8) 
      {
        temp = gameMapCopy[optionOneY][optionOneX]
        gameMapCopy[optionOneY][optionOneX] = 4;
        gameMapCopy[purpleGhost.y][purpleGhost.x] = lastSquare;
        purpleGhost.y = optionOneY
        purpleGhost.x = optionOneX
      } else if (gameMapCopy[optionTwoY][optionTwoX] !== 1 && 
        gameMapCopy[optionTwoY][optionTwoX] !== 5 &&
        gameMapCopy[optionTwoY][optionTwoX] !== 6 &&
        gameMapCopy[optionTwoY][optionTwoX] !== 7 &&
        gameMapCopy[optionTwoY][optionTwoX] !== 8)
      {
        temp = gameMapCopy[optionTwoY][optionTwoX]
        gameMapCopy[optionTwoY][optionTwoX] = 4;
        gameMapCopy[purpleGhost.y][purpleGhost.x] = lastSquare;
        purpleGhost.y = optionTwoY
        purpleGhost.x = optionTwoX
      } else if (gameMapCopy[optionThreeY][optionThreeX] !== 1 && 
        gameMapCopy[optionThreeY][optionThreeX] !== 5 &&
        gameMapCopy[optionThreeY][optionThreeX] !== 6 &&
        gameMapCopy[optionThreeY][optionThreeX] !== 7 &&
        gameMapCopy[optionThreeY][optionThreeX] !== 8)
      {
        temp = gameMapCopy[optionThreeY][optionThreeX]
        gameMapCopy[optionThreeY][optionThreeX] = 4;
        gameMapCopy[purpleGhost.y][purpleGhost.x] = lastSquare;
        purpleGhost.y = optionThreeY
        purpleGhost.x = optionThreeX
      } else {
        temp = gameMapCopy[optionFourY][optionFourX]
        gameMapCopy[optionFourY][optionFourX] = 4;
        gameMapCopy[purpleGhost.y][purpleGhost.x] = lastSquare;
        purpleGhost.y = optionFourY
        purpleGhost.x = optionFourX
      }



    }

  lastSquare = temp;
  if (lastSquare === 2) {
    lose();
    return false;
  }
  createGrid();
  console.log('You are closer if I move ' + tempWant + ' my second choice is ' + tempWant2 + '.')
};

let test;

let gameMapCopy = clone(gameMap[0]);  //update to clone(gameMap[level]) when more levels

let score = 0;

function createGrid (map){
  let worldBuilder = '';
  for(i=0; i<gameMapCopy.length; i++){
      worldBuilder +="<div class='container'>";
    for(j=0; j<gameMapCopy[i].length; j++){
      if(gameMapCopy[i][j] === 1){
        worldBuilder +="<div class='wall'></div>";
      } else if(gameMapCopy[i][j] === 0){
        worldBuilder +="<div class='coin'></div>";
      } else if(gameMapCopy[i][j] === 2){
        worldBuilder +="<div id='pacman'></div>";       
      } else if(gameMapCopy[i][j] === 3){
        worldBuilder +="<div class='blank'></div>";
      } else if(gameMapCopy[i][j] === 4){
        worldBuilder +="<div class='ghost'></div>";
      } else if(gameMapCopy[i][j] === 5){
        worldBuilder +="<div class='wall2'></div>";
      } else if(gameMapCopy[i][j] === 6){
        worldBuilder +="<div class='wall3'></div>";
      } else if(gameMapCopy[i][j] === 7){
        worldBuilder +="<div class='wall4'></div>";
      } else if(gameMapCopy[i][j] === 8){
        worldBuilder +="<div class='wall5'></div>";
      }
    }
    worldBuilder +="</div>";
  }
  document.getElementById('world').innerHTML = worldBuilder;
  document.getElementById('score').innerHtml = score;
  document.getElementById('level').innerHTML = level+1;
  if (score === 24100* (level+1)){
//    setTimeout(function() {             allows the user to pick up the last coin, but causes problems 
//                                        if a key is held down(vs pressed) as win happens
      console.log("24100= " + 24100 * (level+1))
      console.log("level= " + (level+1))
      win();
//    }, 100);
  }
}
createGrid(gameMapCopy);

document.onkeydown = function movePacman (keypress) {
  if (gameStarted === false) {
    gameStarted = true;
    test = setInterval(ghostMove, 200);
  }
  if(keypress.keyCode === 38 && gameMapCopy[position.y-1][position.x] != 1 && 
    gameMapCopy[position.y-1][position.x] != 5 &&
    gameMapCopy[position.y-1][position.x] != 6 &&
    gameMapCopy[position.y-1][position.x] != 7 &&
    gameMapCopy[position.y-1][position.x] != 8)
  {
    if (gameMapCopy[position.y-1][position.x] === 0){
      updateScore();
    } else if (gameMapCopy[position.y-1][position.x] === 4){
      lose();
      return false;
    }
    gameMapCopy[position.y-1][position.x] = 2;
    gameMapCopy[position.y][position.x] = 3;
    position.y = position.y - 1;
  } else if(keypress.keyCode === 39 && gameMapCopy[position.y][position.x+1] != 1 && 
    gameMapCopy[position.y][position.x+1] != 5 &&
    gameMapCopy[position.y][position.x+1] != 6 &&
    gameMapCopy[position.y][position.x+1] != 7 &&
    gameMapCopy[position.y][position.x+1] != 8) 
    {
    if (gameMapCopy[position.y][position.x+1] === 0){
      updateScore();
    } else if (gameMapCopy[position.y][position.x+1] === 4){
      lose();
      return false;
    }
    if (gameMapCopy[position.y][position.x+1] === undefined){
      gameMapCopy[position.y][position.x-27] = 2;
      gameMapCopy[position.y][position.x] = 3;
      position.x = position.x - 27;
    } else {
      gameMapCopy[position.y][position.x+1] = 2;
      gameMapCopy[position.y][position.x] = 3;
      position.x = position.x + 1;      
    }
  } else if(keypress.keyCode === 40 && gameMapCopy[position.y+1][position.x] != 1 && 
    gameMapCopy[position.y+1][position.x] != 5 &&
    gameMapCopy[position.y+1][position.x] != 6 &&
    gameMapCopy[position.y+1][position.x] != 7 &&
    gameMapCopy[position.y+1][position.x] != 8)
    {
    if (gameMapCopy[position.y+1][position.x] === 0){
      updateScore();
    } else if (gameMapCopy[position.y+1][position.x] === 4){
      lose();
      return false;
    }

    gameMapCopy[position.y+1][position.x] = 2;
    gameMapCopy[position.y][position.x] = 3;
    position.y = position.y + 1;
  } else if(keypress.keyCode === 37 && gameMapCopy[position.y][position.x-1] != 1 && 
    gameMapCopy[position.y][position.x-1] != 5 &&
    gameMapCopy[position.y][position.x-1] != 6 &&
    gameMapCopy[position.y][position.x-1] != 7 &&
    gameMapCopy[position.y][position.x-1] != 8 ) 
    {
      if (gameMapCopy[position.y][position.x-1] === 0){
      updateScore();
    } else if (gameMapCopy[position.y][position.x-1] === 4){
      lose();
      return false;
    }        
    if (gameMapCopy[position.y][position.x-1] === undefined){
      gameMapCopy[position.y][position.x+27] = 2;
      gameMapCopy[position.y][position.x] = 3;
      position.x = position.x + 27;
    } else {
      gameMapCopy[position.y][position.x-1] = 2;
      gameMapCopy[position.y][position.x] = 3;
      position.x = position.x - 1;      
    }
  }
  createGrid();
}

function updateScore (){
  score = score + 100;
  document.getElementById('score').innerHTML = score;
}

//create reset function for duplicate code between win and lose.

function win () {
  gameStarted = false;
  level++
  alert("You beat level " + level)
  clearInterval(test);
  position.x = 13;
  position.y = 22;
  lastSquare = 3;
  purpleGhost.x = 13;
  purpleGhost.y = 13;
  lastSquare = 3;
  move = 0;
  gameMapCopy = clone(gameMap[level]);  //update to clone(gameMap[level]) when more levels
  createGrid(gameMapCopy);
}


function lose (){
  gameStarted = false;
  alert("Game Over" + "\n" + "Your final score is " + score);
  position.x = 13;
  position.y = 22;
  purpleGhost.x = 13;
  purpleGhost.y = 13;
  lastSquare = 3;
  move = 0;
  score = -100;
  level = 0;
  updateScore();
  document.getElementById('world').innerHTML = "";
  gameMapCopy = clone(gameMap[0]);  //update to clone(gameMap[level]) when more levels
  createGrid(gameMapCopy);
  clearInterval(test);
}

// function rotatePacman (position){
//   switch (position) {
//     case "top":
//       break;      
//   }
// }

//stackoverflow
function clone (existingArray) {
    var newObj = (existingArray instanceof Array) ? [] : {};
    for (i in existingArray) {
        if (i == 'clone') continue;
        if (existingArray[i] && typeof existingArray[i] == "object") {
          newObj[i] = clone(existingArray[i]);
        } else {
          newObj[i] = existingArray[i]
        }
    }
    return newObj;
}


