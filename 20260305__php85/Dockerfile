FROM php:8.5-cli

# Install utility comuni
RUN apt-get update && apt-get install -y \
    git \
    vim \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Working directory default
WORKDIR /workspace

# Default command
CMD ["php", "-a"]
