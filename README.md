# Fustion Best Practices Example

Stand by, nothing to see here yet!

## Guiding principles

- logicless Fluid, move logic to Fusion
- automatically select page objects based on nodetype name
- try avoid inheritance and prefer composition
- collocate component files together in one folder
- flat is better than deeply nested
- when to extract code into 3rd party package: start in Site package, then refactor to plugin, but keep it in the same repo, when needed to reuse, extract to separate repo
- divide nodetypes and prototypes into three namespaces groups: Content, Document and General, e.g. Flowpack.FusionBP:Content.Text
- store fusion files in a path that represents the prototype namespace
- in general use only one prototype per fusion file, same for NodeTypes files
