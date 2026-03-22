npm-install:
	docker run -it --rm -v .:/app -w /app --user 1000:1000 node:20.11.0 npm i
npm-build:
	docker run -it --rm -v .:/app -w /app --user 1000:1000 node:20.11.0 npm run build
npm-build-tsc:
	docker run -it --rm -v .:/app -w /app --user 1000:1000 node:20.11.0 npm run build-tsc
npm-dev:
	docker run -it --rm -v .:/app -w /app --user 1000:1000 -p 5173:5173 node:20.11.0 npm run dev