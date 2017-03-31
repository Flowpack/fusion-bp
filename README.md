# Fusion Best Practices Example

This is a companion site to demonstrate some of the ideas we spoke about at Neos Conference
in the talk [A Round Trip through your Presentation Layer with Fusion](https://github.com/Flowpack/fusion-bp).

**This is a temporarily project that will be removed once the new demo site is released (soon).**

Feel free to look around, but don't take too much from here, it's just quick demo. The frontend code is really old (from 2014...) and was not created by us, the new demo site will show much better ways to write your CSS code.

## Guiding principles

- logicless Fluid, move logic to Fusion
- automatically select document objects based on nodetype name
- try to avoid inheritance and prefer composition
- collocate component files together in one folder
- flat is better than deeply nested
- store fusion files in a path that represents the prototype namespace
- in general use only one prototype per fusion file, same for NodeTypes files
- try not to modify Fusion objects you don't own (open-closed principle). If absolutely have to override 3rd-party Fusion objects, do it in one place, Override.fusion
